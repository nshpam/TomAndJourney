import { Row, Container } from "reactstrap";
import './Navbar.css';
import './Navbar.scss';
import { Button, Nav, Navbar, NavDropdown ,Tab, Tabs} from 'react-bootstrap';
import image from "../assets/home_bg_img.png"; 

const NavbarComponent=() => {
    return (  
        <Navbar bg="custom-color" expand="lg" >
      <Container>
        <Navbar.Text href="" className="text-white justify-content-start" id="logo-label">Tom&Journey</Navbar.Text>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav" className="justify-content-end">
        <Nav variant="pills" fill defaultActiveKey="/Home" className="pill-color">
      <Nav.Item>
        <Nav.Link eventKey="link-home" href="/Home" className="text-white  custom-size-1 " id="custom-font-bold-1 Home-label">Home</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link eventKey="link-trip-planner" className="text-white  custom-size-1 " id="custom-font-medium-1 Trip-label">Trip Planner</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link eventKey="link-login" className="text-white  custom-size-1 " id="custom-font-medium-1 Login-label">Login</Nav.Link>
      </Nav.Item>
    </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>


    );
    
    
}

export default NavbarComponent;