// Create the app and name it the way you want
// If you change the name you'll have to change the name in your html file for the scope attribute
const example1App = () => ({
    // Data
    todos: [
        {
            label: 'Do laundry',
            done: false
        },
        {
            label: 'Do the dishes',
            done: true
        }
    ],
    newTodo: '', // Methods
    addTodo() {
        if (!this.newTodo) {
            alert('Please enter something');
            return;
        }

        this.todos.push({
            label: this.newTodo,
            done: false
        });

        this.newTodo = '';
    },
    updateTodo(id) {
        this.todos[id].done = !this.todos[id].done;
    }
});

// We wait until the window is fully loaded to execute the script
window.addEventListener('load', function () {
    PetiteVue.createApp(example1App).mount();
});