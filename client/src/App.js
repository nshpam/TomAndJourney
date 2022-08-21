import logo from './logo.svg';
import './App.css';

function App() {
  return (
    
    <div className="App">
      <header className="Nav-header">
        <a class="title" >Tom And Journey</a>
         {/* <img src={logo} className="App-logo" alt="logo" /> */}
        <nav>

          <ul class="nav__links">
            <li> <a href="#">Home</a> </li>
            <li> <a href="#">About us</a> </li>
            <li> <a href="#">Trip Planer</a> </li>

          </ul>
        </nav>
        <a class="sgn" href="#" > <button id="signin"> Sign in </button></a>
        
        
      </header>
      
    </div>
    
    
  );
}

export default App;
