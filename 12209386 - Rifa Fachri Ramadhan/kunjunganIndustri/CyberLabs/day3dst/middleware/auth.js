const express = require('express');
const bookRoute = require('../routes/book');
const authRoute = require('../routes/auth');
const authorRoute = require('../routes/author');
const jwt = require('jsonwebtoken');
const accessTokenSecret = '12209386';

const app = express()

app.use(express.json())
app.use(
    express.urlencoded({
        extended: true,
    })
)

const authenticateJWT = (req, res, next) => {
    const authHeader = req.headers.authrization

    if(!authHeader){
        return res.status(403).json({
            'message': 'unathorized'
        })
    }

    const token = authHeader.split(' ')[1]

    jwt.verify(token, accessTokenSecret, (err, user) => {
        if(err){
            return res.status(403).json({
                'message': 'unauthorized'
            })
        }

        next();
        // next untuk melanjutkan ke controller
    });
}

module.exports = authenticateJWT;