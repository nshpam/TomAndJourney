import logo from './logo.svg';
import './App.css';
import NavbarComponents from './components/NavbarComponent';
import bg_image from'./assets/home_bg_img.png';

function App() {
  return (
    <div id="topic_text">
      <NavbarComponents/>
      

      <div id="bg-image">
        {/* <img src={bg_image} id="bg-image"/> */}
      </div> 

      <div id="content">
        
        <div class="row">
        <h2 id="topic-text">The Wonderful Trip Planner </h2>
        <h1 id="highlight-text">Adventure</h1>

        <p id ='line-text'></p>

        <p id="detail-text">With Tom & Journey, you can plan your trip anywhere<br />
            at anytime. We help you save budget by showing you<br />the best deal.</p>

        <p id="space-buffer"></p>
        </div>

      </div>

         
      
    </div>
  );
}

export default App;
