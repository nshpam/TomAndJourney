const express = require("express")
const morgan = require("morgan")
const cors = require("cors")
const mongoose = require("mongoose")  // mongoose ไว้เชื่อม mongoDB

require("dotenv").config()
// ใช้ตั้งค่าไฟล์นามสกุล .env

const blogRoute = require('./route/blog.js')
// สร้าง func BlogRoute โดยดึง blog.js มากจากfloder route

const app = express()
// connect cloud database
mongoose.connect(process.env.DATABASE,{
    useNewUrlParser:true,
    useUnifiedTopology:false
})
.then(()=>console.log("เชื่อมต่อเรียบร้อย"))
.catch((err)=>console.log(err))

// middle - ware
app.use(express.json()) //ไว้เชื่อม กับ client
app.use(cors()) //
app.use(morgan("dev")) //

// route
app.use('/api',blogRoute)


//Setting Port
const port = process.env.PORT || 8080
app.listen(port,()=>console.log(`start server in port ${port}`))