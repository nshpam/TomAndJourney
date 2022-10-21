import './Navbar.css';
import { Component } from 'react';
import { Squash as Hamburger } from 'hamburger-react';



const NavbarComponents=() =>{ 

 
    return(
      <div>
        <header class="Nav-header">
        <a class="title" id="logo" >Tom And Journey</a>
        
        <nav>

          <ul class="nav">
            <li> <a class="active" href="/" >Home</a> </li>
            <li> <a href="/Tripplanner" >Trip Planer</a> </li>
            <li> <a href="/login" >Login</a> </li>

          </ul>
        </nav>
        <div class="toggle">
        <Hamburger size={25}/>
        </div>
        
      </header>
      </div>
      
      
    );
    
  
}
export default NavbarComponents;