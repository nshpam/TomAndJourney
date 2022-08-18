// ไว้ใช้เก็บ title , content ,author ,slug(url)

// slug คือแปลง install postman เป็น install-postman

const mongoose = require("mongoose")

const blogSchema = mongoose.Schema({
    title:{
        type:String,
        required:true // ห้ามว่าง
    },
    content:{
        type:{},
        required:true
    },
    author:{
        type:String,
        default:"Mercuone"
    },
    slug:{
        type:String,
        lowercase:true,
        unique:true //ห้ามซ้ำ
    }

},{timestamps:true})

module.exports = mongoose.model("Blogs",blogSchema)