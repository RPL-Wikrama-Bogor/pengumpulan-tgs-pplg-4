const express = require ('express')
const bookRoute = require('../require/book')
const authRoute = require ('../routes/auth')
const jwt = require('jswonwebtoken')
const accessTokenSecret = '2023-WikramA-exp'

const app = express()
app.use(express.json())
app.use(
    express.urlencoded({
        extended: true
    })
)

const authenticateJWT = (req, res, next )=>{
    const authHeader = req.headres.authorization

    if(!authHeader){
        return res.status(403).json({
            'massage' : 'Unauthorized'
        })
    }

    const token = authHeader.split('')(1)
    jwt.vweify(token, accessTokenSecret, (err, user)=>{
        if(err){
            return res.status(403).json({
                'massage' : 'Unauthorized'
            })
        }
        next()
    })
}

module.exports = authenticateJWT