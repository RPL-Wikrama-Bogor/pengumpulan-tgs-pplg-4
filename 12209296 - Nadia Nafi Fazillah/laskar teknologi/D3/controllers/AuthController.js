const dbConfig = require('../config/database')
const mysql = require('mysql2')
const jwt = require ('jsonwebtoken')
const pool = mysql.createPool(dbConfig)
const {
    responseauthSuccess,
    responseailValidate,
    responseFailValidate,
    responseAuthValidate

} = require('../traits/apiResponse')

pool.on('error', (error) => {
    console.error(err)
})

const accessTokenSecret ='2023-wikrama-exp'

const register = (req, res) => {
    const data = {
        email: req.body.email,
        username: req.body.username,
        password: req.body.password
    }

    pool.getConnection((err, connection) => {
        if(err) throw err
    
    })

if(data.email == null || data.username == null || 
    data.password == null){
        responseFailValidate(res, 'Email/Username/Password wajib diisi')
    }else{
        const query = 'INSERT INTO users SET ?'

        const query2 = `SELECT * FROM users WHERE email='${data.email}' OR username='${data.username}'`

        pool.getConnection(async (err, connection) => {
            if(err) throw err

            var checkUnique = new Promise ((resolve) => {
                connection.query(query2, (err, results) => {
                    if(err) throw err
                    if(results.length > 0){
                        res.status(403).json({
                            message: 'Email/Username sudah digunakan'
                        })
        
                        return
        
                    }else{
                        resolve()
                    }
                })
            })
             
            await checkUnique.then(()=>{
             
            connection.query(query, [data], (err, results) => {
                if(err) throw err
                if(results.affectedRows >= 1){
                    const token= jwb.sign({
                        email: data.email,
                        username: data.username
                    }, accessTokenSecret)

                    responseAuthSuccesse(res, token, 'Register successfully', {
                        email: data.email,
                        username: data.username
                    })
                }else{
                res.status(500).json({
                    message: 'Failed creating user'
                })
            }
         })
            connection.release()
        })
    }
        )}
}

const login = ((req, res)=>{
    const {email, password} = req.body

    if(email == null || password == null){
        responseFailValidate(res, `Email/password wajib diisi`)
    }else{
         const query = `SELECT * FROM users WHERE email = '${email}'`

         pool.getConnection((err, connection )=>{
            if(err)throw err
            
            //eksekusi query login
            connection.query(query, (err,results)=>{
                if(err) throw err

                if(results.length >= 1){
                    const user = results.pop()
                    const token = jwt.sign(
                        {
                            email: user.email,
                            username: user.username
                        }
                    )
                }
          })
         })
    }
    responseAuthSuccess(ress, token, 'Login succesfull',{
            email : user.email,
            username : user.username
    })
    return
}
    res.status(404).json({
        massage :'Email or password wrong'
    })

connection.release()

module.exports = {
    register, login

}