const makeServerRequest = new Promise((resolve, reject) => {
  // responseFromServer represents a response from a server
  let responseFromServer;
    
  if(responseFromServer) {
    // we have successfully completed the promise
    resolve("We got the data");
  } else {	
    // reject method example. our promise is false. 
    reject("Data not received");
  }
});