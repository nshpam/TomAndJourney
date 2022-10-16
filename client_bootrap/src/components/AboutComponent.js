import './Register.css';

const AboutComponent=()=>{
    return (
        <div>
            <div className="App">
      
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
    </div>

            <div >
            </div>
        

            <div>
                <input type="submit" id="regis-submit" value="Register"></input>
            </div>

            

            

                
        
        <div>
        {/* FOOTER WIP */}
        {/* <footer>WIP</footer> */}
        </div>



        </div>

    );
}
export default AboutComponent;