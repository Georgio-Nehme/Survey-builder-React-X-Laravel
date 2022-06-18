import Navbar from "./Navbar";
import SurveyTitle from './SurveyTitle';
import Question from './Question';
import SubmitButton from './SubmitButton';


const Survey = () => {
    return ( 
        <div className="survey">
            <SurveyTitle/>
            <input className="user_email" placeholder="Email"></input>
            <div className="questions_container">
                <Question/>
            </div>
            <SubmitButton/>
        </div>
     );
}
 
export default Survey;