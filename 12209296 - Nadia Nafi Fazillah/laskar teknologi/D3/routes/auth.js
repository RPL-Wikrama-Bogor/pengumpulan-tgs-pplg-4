const express = require('express')
const {
    register
} = require('../controllers/AuthController')
const router = express.Router()

//mengirim data register,login
router.post('/register', register)
router.post('/login', login)

module.exports = router