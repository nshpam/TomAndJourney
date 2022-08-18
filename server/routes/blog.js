const express = require("express")
const router = express.Router()

const {create} = require("../controllers/blogController")

router.post('/create',create)

// router.get('/blog',(req,res)=>{
//     res.json({
//         data:"Hello Route Blog"
//     })
// })

module.exports=router