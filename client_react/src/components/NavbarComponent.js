import './Navbar.css';
import { Component } from 'react';
import { Squash as Hamburger } from 'hamburger-react';


class NavbarComponents extends Component { 
  

  render() {
    return(
      <div>
        <header class="Nav-header">
        <a class="title" id="logo" >Tom And Journey</a>
        
        <nav>

          <ul class="nav">
            <li> <a href="/" class="active">Home</a> </li>
            <li> <a href="/Tripplanner" class="active">Trip Planer</a> </li>
            <li> <a href="/login" class="active">Login</a> </li>

          </ul>
        </nav>
        <div class="toggle">
        <Hamburger size={25}/>
        </div>
        
      </header>
      
      
      </div>
      
    )
    
  }
};
export default NavbarComponents;