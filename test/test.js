var arr = [1, 4, 7, 2, 5, 6, 3, 100, 50, 23, 41, 0];

// insertion sort
function insertion_sort(arr){
	var len = arr.length;
	for (var i=1; i<len; i++){
		var tmp = arr[i];
		for (var q=i-1; q>=0 && arr[q]>tmp; q--){
			arr[q+1] = arr[q];
		}
		if (q!=i-1){
			arr[q+1] = tmp;
		}
		// console.log(arr);		
	}
	return arr;
}

// var ret = insertion_sort(arr);
// console.log(ret);


// bubble sort
// function bubble_sort(arr){
// 	var len = arr.length;
// 	for (var i=1; i<len; i++){
// 		for (var q=i-1; q>=0; q--){
// 			if (arr[q+1] < arr[q]){
// 				var tmp = arr[q];
// 				arr[q] = arr[q+1];
// 				arr[q+1] = tmp;
// 			}
// 		}
// 	}
// 	return arr;
// }

// var ret = bubble_sort(arr);
// console.log(ret);


//quick sort
// function quick_sort(arr){
// 	var len = arr.length;
// 	var left = [];
// 	var right = [];
// 	var pivot = arr[0];
// 	if (len<=1){
// 		return arr;
// 	}
// 	for (var i=1; i<len; i++){
// 		if (arr[i]<=pivot){
// 			left.push(arr[i]);
// 		}else{
// 			right.push(arr[i]);
// 		}
// 	}
// 	return quick_sort(left).concat(pivot, quick_sort(right));
// }

// var ret = quick_sort(arr);
// console.log(ret);

//merge sort
function merge_sort(){

}


function merge(){
	
}


