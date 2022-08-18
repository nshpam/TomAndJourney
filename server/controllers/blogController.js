// ใช้คอนโทรล database

const slugify = require("slugify")
const Blogs = require("../models/blogSchema")

exports.create=(req,res)=>{
    const {title,content,author}=req.body
    const slug = slugify(title)
    
    //validate ความถูกของข้อมูล
    switch(true){
        case !title:
            return res.status(400).json({error:"กรุณาป้อนบทความ"})
            break;
        case !content:
            return res.status(400).json({error:"กรุณาป้อนเนื้อหา"})
            break;
    }

    Blogs.create({title,content,author,slug},(err,blog)=>{
        if(err){
            res.status(400).json({error:"มีชื่อบทความนี้อยู่แล้ว"})
        }
    
        res.json(blog)
    
})

    //  res.json({
    //      data:{title,content,author,slug}
    // })
}