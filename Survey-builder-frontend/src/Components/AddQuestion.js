import { useState } from "react";

const AddQuestion = () => {
   

    return ( 
        <div className="add_question">
          <p>Select Question Type:</p>
          <select name="selectList" value='questionType'>
            <option></option>
            <option value="text">Text</option>
            <option value="mcq">Multiple Choice</option>
            <option value="dropDown">Drop Down List</option>
          </select>
          
          <input type='text' placeholder='Ask a question'></input>

          <button className="add_button">Add Question</button>
        </div>
      );
    }

export default AddQuestion;