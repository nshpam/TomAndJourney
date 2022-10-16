import logo from './logo.svg';
import './App.css';
import NavbarComponents from './components/NavbarComponent';
import bg_image from'./assets/home_bg_img.png';

function App() {
  return (
    <div className="">
      <NavbarComponents/>

      <section>
        <img src={bg_image} id="bg"/>
      </section>
      
    </div>
  );
}

export default App;
