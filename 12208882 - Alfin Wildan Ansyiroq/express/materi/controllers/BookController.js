const mysql = require('mysql2')
const dbConfig = require('../config/database')
const {
    responseNotFound,
    responseSuccess
} = require('../helper/helper')
const pool = mysql.createPool(dbConfig)

const getBooks = (req, res) => {
    const query = "SELECT * FROM book"

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err

           responseSuccess(res, results, 'books succesfully fetched')
        })
        connection.release()
    })
}

module.exports = {
    getBooks
}