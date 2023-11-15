const mysql = require('mysql2')
const dbConfig = require('../config/database')
const {
    responseNotFound,
    responseSuccess
} = require('../helper/helper')
const pool = mysql.createPool(dbConfig)

const getBooks = (req, res) => {
    const query = "SELECT * FROM books"

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err

            responseSuccess(res, results, 'Book successfully fetched')
        })

        connection.release()
    })
}

module.exports = {
    getBooks
}
