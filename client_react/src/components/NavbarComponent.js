import './Navbar.css';
const NavbarComponents=()=>{

    return(
        <header class="Nav-header">
        <a class="title" id="logo" >Tom And Journey</a>
        <div class="toggle"></div>
        <nav>

          <ul class="nav">
            <li> <a href="/" id="Nav_">Home</a> </li>
            <li> <a href="/Tripplanner" id="Nav_">Trip Planer</a> </li>
            <li> <a href="/login" id="Nav_">Login</a> </li>

          </ul>
        </nav>
        
        
      </header>
    )

};
export default NavbarComponents;