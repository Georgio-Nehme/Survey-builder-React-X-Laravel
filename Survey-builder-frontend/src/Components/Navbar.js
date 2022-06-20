import {Link} from 'react-router-dom';

const Navbar = () => {
    return (  
        <nav className="navbar">
            <h1>
                SurveyLaunch
            </h1>
            <div className="links">
                <Link to="/Login">Login</Link>
            </div>
        </nav>
    );
}
 
export default Navbar;