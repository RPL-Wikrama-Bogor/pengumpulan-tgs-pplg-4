const express = require('express');
const router = express.Router();
const {
    getAuthors,
    getAuthorById,
    createAuthor,
    updateAuthor,
    deleteAuthor
    
} = require('../controllers/AuthorController')

router.get('/', getAuthors);

router.get('/:id', getAuthorById);

// route untuk mengrim data
router.post('/', createAuthor)

// route untuk memperbaharui data
router.put('/:id', updateAuthor)

// route untuk mendelete/menghapus
router.delete('/:id', deleteAuthor )

module.exports = router;