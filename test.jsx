const divb = document.getElementById("test");

/*
function App() {
    const [notes, setNotes] = useState(initNotes);

    function showDesc(id) {
        setNotes(notes.map(note => {
            if (note.id === id) {
                return {...note, show: !note.show};
            } else {
                return note;
            }
        }));
    }

    const result = notes.map(note => {
        let desc;
        if (note.show) {
            desc = <i>{note.desc}</i>;
        }

        return <p key={note.id}>
            {note.name}
            <button onClick={() => showDesc(note.id)}>show</button>
            {desc}
        </p>;
    });

    return <div>
        {result}
    </div>;
}*/

function closure () {
  let cnt = 0;
  console.log(cnt);
  return function() {
    return ++cnt;
  }
}

let inner = closure();

console.log(inner());
console.log(inner());
console.log(inner());




