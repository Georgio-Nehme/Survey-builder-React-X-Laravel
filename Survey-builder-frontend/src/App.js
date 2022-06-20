
import Navbar from './Components/Navbar';
import Home from './Components/Home';
import SurveyCarroucell from './Components/SurveyCarousel';
import Survey from './Components/Survey';
import { BrowserRouter as Router, Route, Switch} from 'react-router-dom';
import CreateSurvey from './Components/CreateSurvey';
import AddQuestion from './Components/AddQuestion';
import Login from './Components/Login';
import AddQuestions from './Components/AddQuestions';



function App() {
  return (
    <Router>
      <div className="App">
        <Navbar/>
        <div className='content'>
          <Switch>
            
            <Route path='/Login'>
              <Login/>
            </Route>

            <Route path='/Home'>
              <Home/>
            </Route>

            <Route path='/Survey'>
              <Survey/>
            </Route>

            <Route path='/Create'>
              <CreateSurvey/>
            </Route>

            <Route path='/AddQuestions'>
              <AddQuestions/>
            </Route>
           
          </Switch>
        </div>
      </div>
    </Router>
  );
}

export default App;
