/** @format */

const mysql = require("mysql2");
const dbConfig = require("../config/database");
const { responseNotFound, responseSuccess } = require("../traits/ApiResponse");
const pool = mysql.createPool(dbConfig);

const getBooks = (req, res) => {
  const query = "SELECT * FROM books";

  pool.getConnection((err, connection) => {
    if (err) throw err;

    connection.query(query, (err, results) => {
      if (err) throw err;

      responseSuccess(res, results, "Books successful fetched");
    });

    connection.release();
  });
};
const getBook = (req, res) => {
  const id = req.params.id;

  const query = `SELECT * FROM books WHERE id=${id}`;

  pool.getConnection((err, connection) => {
    if (err) throw err;

    connection.query(query, (err, result) => {
      if (err) throw err;

      if (result.length == 0) {
        responseNotFound(res);
        return;
      }

      responseSuccess(res, result, "Book successfully fetched");
    });

    connection.release();
  });
};

const addBook = (req, res) => {
  const data = {
    nama: req.body.nama,
    author: req.body.author,
    year: req.body.year,
    page_count: req.body.page_count,
    publisher: req.body.publisher,
  };

  const query = "INSERT INTO books SET ?";

  pool.getConnection((err, connection) => {
    if (err) throw err;

    connection.query(query, [data], (err, result) => {
      if (err) throw err;

      responseSuccess(res, result, "Book successfully added");
    });
    connection.release();
  });
};

const updateBook = (req, res) => {
  const id = req.params.id;

  const data = {
    nama: req.body.nama,
    author: req.body.author,
    year: req.body.year,
    page_count: req.body.page_count,
    publisher: req.body.publisher,
  };

  const query = `UPDATE books SET ? WHERE id=${id}`;

  pool.getConnection((err, connection) => {
    if (err) throw err;

    connection.query(query, [data], (err, results) => {
      if (err) throw err;

      if (results.affectedRows == 0) {
        responseNotFound(res);
        return;
      }

      responseSuccess(res, results, "Book successfully updated");
    });

    connection.release();
  });
};

const deleteBook = (req, res) => {
  const id = req.params.id;

  const query = `DELETE FROM books WHERE id=${id}`;

  pool.getConnection((err, connection) => {
    if (err) throw err;

    connection.query(query, (err, results) => {
      if (err) throw err;

      if (results.affectedRows == 0) {
        responseNotFound(res);
        return;
      }

      responseSuccess(res, results, "Book successfully deleted");
    });

    connection.release();
  });
};


const searchBookByName = (req, res) => {
    const searchTerm = req.query.name;
  
    if (!searchTerm) {
      // Handle if no search term is provided
      return res.status(400).json({ error: "Search term (name) is required" });
    }
  
    const query = `SELECT * FROM books WHERE nama LIKE ?`;
    const searchValue = `%${searchTerm}%`;
  
    pool.getConnection((err, connection) => {
      if (err) throw err;
  
      connection.query(query, [searchValue], (err, results) => {
        if (err) throw err;
  
        if (results.length == 0) {
          responseNotFound(res);
          return;
        }
  
        responseSuccess(res, results, "Books successfully fetched by name");
      });
  
      connection.release();
    });
  };
  
  module.exports = {
    getBooks,
    getBook,
    addBook,
    updateBook,
    deleteBook,
    searchBookByName,
  };
