const express = require('express')
const bookRoute = require('../routes/book')
const authorRoute = require('./routes/auth')
const jwt = require('jsonwebtoken')
const { user } = require('../config/database')
const accessTokenSecret = '2023-Wikrama-exp'

const app = express()
app.use(express.json())
app.use(
    express.urlencoded({
        extended: true
    })
)

const authenticateJWT = (req, res, next) => {
    const autHeader = req.headers.authorization

    if (!autHeader) {
        return res.status(403).json({
            'message' : 'unauthorized'
        })
    }

    const token = autHeader.split(' ')[1]

    jwt.verify(token, accessTokenSecret, (err, user) => {
        if(err){
            return res.status(403).json({
            'message' : 'unauthorized'
            })
        }
        next()
    })
}

module.exports = authenticateJWT

