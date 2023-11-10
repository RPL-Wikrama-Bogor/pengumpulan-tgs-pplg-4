const mysql = require('mysql2')
const dbConfig = require('../config/database');
const pool = mysql.createPool(dbConfig);

const {
    responseNotFound,
    responseSuccess
} = require('../traits/ApiResponse');
const { connect } = require('../routes/book');
// const { connect } = require('../routes/book');
// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
// const { query } = require('express');

const search = (req, res) => {
    // contoh akses `http://localhost:${PORT}/search?keyword= mau cari apa
    const keyword = req.query.keyword

    const query = `SELECT * FROM books WHERE nama LIKE '${keyword}'`

    pool.getConnection((err, connection) => {
        if(err) throw err
        connection.query(query, (err, result) => {
            if(err) throw err

            if(result.length == 0){
                return res.json({
                    message: "data tidak ditemukan"
                })
            }

            responseSuccess(res, result, 'Book successfully fetched')
        })

        connection.release()
    })
    
}

const sortBy = (req, res) => {
    const orderBy = req.query.order

    const query = `SELECT * FROM books ORDER BY nama ${orderBy}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, result) => {
            if(err) throw err

            if(result.lenght == 0){
            responseNotFound(res)
            return
            }
            responseSuccess(res, result, 'Book successfully fetched')
        })

        connection.release();
    })
}


const getBooks = (req, res) => {
    const query = "SELECT * FROM books";

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, result) => {
            if(err) throw err

            responseSuccess(res, result, 'Books succesfully fetched')
        })

      connection.release();
    })
}

const getBookById = (req, res) => {
    const id = req.params.id;
    const query = `SELECT * FROM books WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, result) => {
            if (err) throw err;

            if (result.length == 0) {
                responseNotFound(res)
                return
            }

            responseSuccess(res, result, 'Book successfully fetched')
        })

        connection.release();
    })

}

const createBook = (req, res) => {
    const data = req.body

    const query = 'INSERT INTO books (nama, author, year, page_count, publisher) VALUES (?, ?, ?, ?, ?)';
    const values = [data.nama, data.author, data.year, data.page_count, data.publisher]

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, values, (err, result) => {
            if (err) throw err;

                responseSuccess(res, result, 'Book successfully created');
        

            connection.release();
        });
    });
    
}

const updateBook = (req, res) => {
    const id = req.params.id;
    const data = req.body;

    const query = `UPDATE books SET nama = ?, author = ?, year = ?, page_count = ?, publisher = ? WHERE id = ${id}`
    const values = [data.nama, data.author, data.year, data.page_count, data.publisher]

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, values, (err, result) => {
            if(err) throw err

            responseSuccess(res, result, 'Book successfully updated')

            connection.release()
        })
    })
}

const deleteBook = (req, res) => {
    const id = req.params.id;
    const query = `DELETE FROM books WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, id, (err, result) => {
            if (err) throw err

            responseSuccess(res, result, 'Book successfully deleted');

            connection.release
        })
    })
}

    

module.exports = {
    getBooks,
    getBookById,
    createBook,
    updateBook,
    deleteBook,
    search, 
    sortBy
}