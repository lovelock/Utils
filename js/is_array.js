function is_array(input_var) {
    if (Object.prototype.toString.apply(input_var) === ['object Array']) {
        return true;
    }
    return false;
}

var a = ['a', 'b'];
console.log( is_array(a) );
