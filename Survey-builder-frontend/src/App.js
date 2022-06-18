
import Navbar from './Components/Navbar';
import Home from './Components/Home';
import SurveyCarroucell from './Components/SurveyCarroucell';
import Survey from './Components/Survey';
import { BrowserRouter as Router, Route, Switch} from 'react-router-dom';




function App() {
  return (
    <Router>
      <div className="App">
        <Navbar/>
        <div className='content'>
          <Switch>
            <Route path='/Home'>
              <Home/>
            </Route>
            <Route path='/Survey'>
              <Survey/>
            </Route>
          </Switch>
        </div>
      </div>
    </Router>
  );
}

export default App;
