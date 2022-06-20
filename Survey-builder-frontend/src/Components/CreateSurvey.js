import { Link, useNavigate, Routes, Route, } from 'react-router-dom';
import AddQuestions from './AddQuestions';



const CreateSurvey = () => {
    return ( 

        <div className="create_survey">                    
            <h1 className="title">Survey Creator</h1>
            <div className="survey_header">
                <input className="survey_title_input" placeholder="Add Survey Title"></input>
                <input className="survey_description_input" placeholder="Add Survey Description"></input>
                
                <button className="add_survey">Add survey</button>       
           
            </div>
        </div>
     );
}
 
export default CreateSurvey;