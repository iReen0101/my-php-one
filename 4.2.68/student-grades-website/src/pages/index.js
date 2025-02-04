import React, { useState } from 'react';
import GradeDisplay from '../components/GradeDisplay';
import calculateGrade from '../utils/calculateGrade';
import '../styles/main.css';

const IndexPage = () => {
    const [score, setScore] = useState('');
    const [grade, setGrade] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();
        const numericScore = parseFloat(score);
        if (!isNaN(numericScore) && numericScore >= 0 && numericScore <= 100) {
            setGrade(calculateGrade(numericScore));
        } else {
            alert("Please enter a valid score between 0 and 100.");
        }
    };

    return (
        <div className="container">
            <h1>Student Grade Calculator</h1>
            <form onSubmit={handleSubmit}>
                <input
                    type="number"
                    value={score}
                    onChange={(e) => setScore(e.target.value)}
                    placeholder="Enter student's score"
                    required
                />
                <button type="submit">Calculate Grade</button>
            </form>
            {grade && <GradeDisplay grade={grade} />}
        </div>
    );
};

export default IndexPage;