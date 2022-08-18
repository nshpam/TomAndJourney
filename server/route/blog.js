const express = require("express")
const router = express.Router()

const {create} = require("../controller/blogController")

router.get('/blog',create)

// router.get('/blog',(req,res)=>{
//     res.json({
//         data:"Hello Route Blog"
//     })
// })

module.exports=router