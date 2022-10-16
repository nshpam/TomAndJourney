
import NavbarComponent from './NavbarComponent';
import './Home.css';


const HomeComponent=() => {
    return (

        <div id='bg-image'>

            <NavbarComponent/>
          
            <div id='row'>
                <h2 id="topic-text">The Wonderful Trip Planner</h2>
            
                <h1 id="Advtext">Adventure</h1>
                <p id ='line-text'></p>
                <p id="detail-text">With Tom & Journey, you can plan your trip anywhere<br />
                at anytime. We help you save budget by showing you<br />the best deal.</p>
        
        {/* <Col md={2}><Button  id="button-1">Get Started</Button></Col>
        <Col md={2}><Button  id="button-2">See more</Button></Col> */}
        
            </div>


        </div>
    );
}

export default HomeComponent;