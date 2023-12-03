const dbConfig = require('../config/database');
const mysql = require('mysql2')
const jwt = require('jsonwebtoken');
const pool = mysql.createPool(dbConfig)
const {
    responseFailValidate,
    responseAuthSuccess,
} = require('../traits/ApiResponse');
// const { Connection } = require('mysql2/typings/mysql/lib/Connectifon');

pool.on("error", (err) => {
    console.error(err);
  });
  
  const accessTokenSecret = "12209386";
  
const register = (req, res) => {
  if(req.body.email == null || req.body.username == null || req.body.password == null){
    responseFailValidate(res, 'Email/Username/Password wajib diisi');
  }

  const data = {
    email:req.body.email,
    username:req.body.username,
    password:req.body.password,
  };

  const query = 'INSERT INTO users SET ?;';

  pool.getConnection((err, connection) => {
    if(err) throw err;

    connection.query(query, [data], (err,result) => {
      if(err) throw err;

      if(result.affectedRows >= 1) {
        const token = jwt.sign(
          {email: data.email, username: data.username, },
          accessTokenSecret
        );

        responseAuthSuccess(res, token, 'Register successful', {
          email:data.email,
          username: data.username,
        });
      }
      res.status(500).json('Failed creating user');
    });

    connection.release();
  })
};

// const login = (req, res) => {
//   if(req.body.email == null || req.body.password == null) {
//     responseFailValidate(res, 'Email/Password wajib diisi');
//   } 

//   const {email, password} = req.body;

//   const query = `SELECT * FROM users WHERE email = '${email}' AND password = '${password}';`;

//   pool.getConnection((err, connection) => {
//     if(err) throw err;

//     connection.query(query, (err, result) => {
//       if(err) throw err;

//       if(result.length >= 1){
//         const user = result.pop();

//         const token = jwt.sign(
//           {emai: user.email, username: user.username, },
//           accessTokenSecret
//         );

//         responseAuthSuccess(res, token, 'Login successful', {
//           email: user.email,
//           username: user.username,
//         });
//         return;
//       }
//       res.status(404).json({message: 'Your Email or Password is wrong'});
//     });

//     connection.release();
//   })
// }

const login = ((req, res) => {
  const {email, password } = req.body

  if(email == null || password || null) {
    responseFailValidate(res, 'Email/Password wajib diisi');
  } else {
    const query = `SELECT * FROM users WHERE email = '${email}' AND password = '${password}'`

    pool.getConnection((err, connection) => {
      if(err) throw err

      connection.query(query, (err, result) => {
        if(err) throw err

        if(result.length >= 1){
          const user = result.pop()

          const token = jwt.sign(
            {
              email: user.email,
              username: user.username
            },
            accessTokenSecret
          )

          responseAuthSuccess(res, token, 'login successful', {
            email: user.email,
            username: user.username
          })

          return
        }
        res.status(404).json({
          message: 'Email or password wrong'
        })
        
      })
      
      connection.release();
    })
  }
})

module.exports = {
  register,
  login
};