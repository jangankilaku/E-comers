const express = require('express');
const bodyParser = require('body-parser');
const fs = require('fs');
const cors = require('cors');
const YAML = require('yamljs');

const app = express();
const PORT = 3000;

app.use(cors());
app.use(bodyParser.json());

const DB_FILE = 'db.yaml';

// Load data from YAML file
function loadData() {
    if (!fs.existsSync(DB_FILE)) {
        return { products: [], cart: [] };
    }
    return YAML.load(DB_FILE);
}

// Save data to YAML file
function saveData(data) {
    fs.writeFileSync(DB_FILE, YAML.stringify(data, 4));
}

// Add new product
app.post('/add-product', (req, res) => {
    const { name, price } = req.body;
    const data = loadData();
    data.products.push({ id: Date.now(), name, price });
    saveData(data);
    res.send('Product added');
});

// Delete product
app.post('/delete-product', (req, res) => {
    const { id } = req.body;
    const data = loadData();
    data.products = data.products.filter(product => product.id !== id);
    saveData(data);
    res.send('Product deleted');
});

// Get all products
app.get('/products', (req, res) => {
    const data = loadData();
    res.json(data.products);
});

// Search products
app.get('/search', (req, res) => {
    const { query } = req.query;
    const data = loadData();
    const results = data.products.filter(product =>
        product.name.toLowerCase().includes(query.toLowerCase())
    );
    res.json(results);
});

// Add to cart
app.post('/add-to-cart', (req, res) => {
    const { id } = req.body;
    const data = loadData();
    const product = data.products.find(product => product.id === id);
    if (product) {
        data.cart.push(product);
        saveData(data);
        res.send('Product added to cart');
    } else {
        res.status(404).send('Product not found');
    }
});

// Get cart
app.get('/cart', (req, res) => {
    const data = loadData();
    res.json(data.cart);
});

app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
