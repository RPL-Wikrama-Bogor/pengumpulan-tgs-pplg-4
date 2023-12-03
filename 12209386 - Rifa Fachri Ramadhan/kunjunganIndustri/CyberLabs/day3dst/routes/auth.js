const express = require('express');
// const {
//     register
// } = require('../controllers/AuthController')

// const router = express.Router();

// router.post('/register', register);

// module.exports = router;

const AuthController = require('../controllers/AuthController');
const router = express.Router()


router.post('/register', AuthController.register);
router.post('/login', AuthController.login);

module.exports = router;