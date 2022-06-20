import AddQuestion from "./AddQuestion";

const AddQuestions = () => {
    return ( 
        <div className="add_question_to_survey">
            <div className="survey_header">
                <h2>Survey Title</h2>
                <h3>Survey Description</h3>
            </div>
            <AddQuestion/>
            <ul>
                
            </ul>
        </div>
     );
}
 
export default AddQuestions;