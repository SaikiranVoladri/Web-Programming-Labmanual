function parseJson() {
    var content = '{ "students": [ { "name": "Sai", "age": "20", "marks": [4, 5, 5] }, { "name": "Kiran", "age": "21", "marks": [5, 5, 5] }, { "name": "Mani", "age": "22", "marks": [5, 5, 5] } ]}';
    var json = JSON.parse(content);
    // show on document
    document.getElementById('json').innerHTML = json.students[0].name;
}
