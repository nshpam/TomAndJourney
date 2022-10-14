const NavbarComponents=()=>{

    return(
        <header className="Nav-header">
        <a class="title" id="Nav_" >Tom And Journey</a>
        
        <nav>

          <ul class="nav__links">
            <li> <a href="/" id="Nav_">Home</a> </li>
            <li> <a href="/abouts" id="Nav_">About us</a> </li>
            <li> <a href="#" id="Nav_">Trip Planer</a> </li>

          </ul>
        </nav>
        <a class="sgn" href="/login" > <button id="signin"> Sign in </button></a>
        
        
      </header>
    )

}
export default NavbarComponents;