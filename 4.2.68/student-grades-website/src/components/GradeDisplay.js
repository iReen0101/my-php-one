import React from 'react';

const GradeDisplay = ({ score }) => {
    const calculateGrade = (score) => {
        if (score >= 80) return 'A';
        if (score >= 70) return 'B';
        if (score >= 60) return 'C';
        if (score >= 50) return 'D';
        return 'F';
    };

    return (
        <div>
            <h2>The student's grade is: {calculateGrade(score)}</h2>
        </div>
    );
};

export default GradeDisplay;