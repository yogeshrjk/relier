var semObject = {
    "INFORMATION TECHNOLOGY": {
        "3rd": ["Mathematics-III", "Discrete Structures", "Basic Electronics & Network Theory", "Concepts of IT & Web Technology", "Problem Solving & Logic Building using C", "Digital Electronics & Logic Design"],
        "4th": ["Computational Mathematics", "Telecom Switching & Computer Networks", "Data Structures and Algorithm Analysis", "Analog Electronics Circuits", "Object Oriented Concepts & Programming using C++", "Computer Organization and Architecture"],
        "5th": ["Microprocessor & Interfaces", "Principles of Communication system", "Database Management System", "Operating System", "Programming in Java", "Theory of Computation"],
        "6th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "7th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "8th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"]

    },
    "COMPUTER SCIENCE": {
        "1st": ["basic civil", "mortar"],
        "2nd": ["lintel", "rocks"],
        "3rd": ["Mathematics-III", "Discrete Structures", "Basic Electronics & Network Theory", "Concepts of IT & Web Technology", "Problem Solving & Logic Building using C", "Digital Electronics & Logic Design"],
        "4th": ["Computational Mathematics", "Telecom Switching & Computer Networks", "Data Structures and Algorithm Analysis", "Analog Electronics Circuits", "Object Oriented Concepts & Programming using C++", "Computer Organization and Architecture"],
        "5th": ["Microprocessor & Interfaces", "Principles of Communication system", "Database Management System", "Operating System", "Programming in Java", "Theory of Computation"],
        "6th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "7th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "8th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"]
    },
    "MECHANICAL": {
        "1st": ["basic civil", "mortar"],
        "2nd": ["lintel", "rocks"],
        "3rd": ["Mathematics-III", "Discrete Structures", "Basic Electronics & Network Theory", "Concepts of IT & Web Technology", "Problem Solving & Logic Building using C", "Digital Electronics & Logic Design"],
        "4th": ["Computational Mathematics", "Telecom Switching & Computer Networks", "Data Structures and Algorithm Analysis", "Analog Electronics Circuits", "Object Oriented Concepts & Programming using C++", "Computer Organization and Architecture"],
        "5th": ["Microprocessor & Interfaces", "Principles of Communication system", "Database Management System", "Operating System", "Programming in Java", "Theory of Computation"],
        "6th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "7th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "8th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"]
    },
    "ELECTRICAL": {
        "1st": ["basic civil", "mortar"],
        "2nd": ["lintel", "rocks"],
        "3rd": ["Mathematics-III", "Discrete Structures", "Basic Electronics & Network Theory", "Concepts of IT & Web Technology", "Problem Solving & Logic Building using C", "Digital Electronics & Logic Design"],
        "4th": ["Computational Mathematics", "Telecom Switching & Computer Networks", "Data Structures and Algorithm Analysis", "Analog Electronics Circuits", "Object Oriented Concepts & Programming using C++", "Computer Organization and Architecture"],
        "5th": ["Microprocessor & Interfaces", "Principles of Communication system", "Database Management System", "Operating System", "Programming in Java", "Theory of Computation"],
        "6th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "7th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "8th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"]
    },
    "ELECTRONICS & TELECOMMUNICATION": {
        "1st": ["basic civil", "mortar"],
        "2nd": ["lintel", "rocks"],
        "3rd": ["Mathematics-III", "Discrete Structures", "Basic Electronics & Network Theory", "Concepts of IT & Web Technology", "Problem Solving & Logic Building using C", "Digital Electronics & Logic Design"],
        "4th": ["Computational Mathematics", "Telecom Switching & Computer Networks", "Data Structures and Algorithm Analysis", "Analog Electronics Circuits", "Object Oriented Concepts & Programming using C++", "Computer Organization and Architecture"],
        "5th": ["Microprocessor & Interfaces", "Principles of Communication system", "Database Management System", "Operating System", "Programming in Java", "Theory of Computation"],
        "6th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "7th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "8th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"]
    },
    "CIVIL": {
        "1st": ["basic civil", "mortar"],
        "2nd": ["lintel", "rocks"],
        "3rd": ["Mathematics-III", "Discrete Structures", "Basic Electronics & Network Theory", "Concepts of IT & Web Technology", "Problem Solving & Logic Building using C", "Digital Electronics & Logic Design"],
        "4th": ["Computational Mathematics", "Telecom Switching & Computer Networks", "Data Structures and Algorithm Analysis", "Analog Electronics Circuits", "Object Oriented Concepts & Programming using C++", "Computer Organization and Architecture"],
        "5th": ["Microprocessor & Interfaces", "Principles of Communication system", "Database Management System", "Operating System", "Programming in Java", "Theory of Computation"],
        "6th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "7th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"],
        "8th": ["Web Application Development", "Information Theory & Coding", "Software Engineering & Project Management", "UNIX & Shell Programming", "Computer Graphics & Animation", "Multimedia & Virtual Reality"]
    },
}
window.onload = function() {
    var branchSel = document.getElementById("branchSel"),
        semSel = document.getElementById("semSel"),
        subjectSel = document.getElementById("subjectSel");
    for (var branch in semObject) {
        branchSel.options[branchSel.options.length] = new Option(branch, branch);
    }
    branchSel.onchange = function() {
        semSel.length = 1; // remove all options bar first
        subjectSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done
        for (var sem in semObject[this.value]) {
            semSel.options[semSel.options.length] = new Option(sem, sem);
        }
    }
    branchSel.onchange(); // reset in case page is reloaded
    semSel.onchange = function() {
        subjectSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done
        var subject = semObject[branchSel.value][this.value];
        for (var i = 0; i < subject.length; i++) {
            subjectSel.options[subjectSel.options.length] = new Option(subject[i], subject[i]);
        }
    }
}