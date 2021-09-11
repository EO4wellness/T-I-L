Writing your first Go test
by: Jon Calhoun

Hi E.O.,

This week I want to explore testing in Go. To do this, I think we should start with a really simple question - what is a test?

I know, it sounds like a trick question, but it really isn't. I just want to make sure we start at the very beginning so testing *really* makes sense.


Okay, so putting it as simply as possible, a test is just a repeatable process that verifies whether or not something is working. It doesn't have to be code we write, but we all know how to run our code and look at the results so there is no need to teach you how to test that way 😜

If you wanted to write a test without any knowledge of testing libraries in Go, you could do so by creating a main package and having the program panic if an unexpected result was returned. Let's explore this a bit further. First, we need to define our code we want to test.
```
package math

func Sum(numbers []int) int {
  sum := 0
  // This bug is intentional
  for n := range numbers {
    sum += n
  }
  return sum
}
```
Next we create the main package to test this function.
```
package main

import (
  "fmt"
  // this is not a real package
  "github.com/joncalhoun/math"
)

func main() {
  numbers := []int{2, 2, 2, 4}
  want := 10
```

Run it on the Go Playground → https://play.golang.org/p/bJYa9KwP_0t​

If we run this code, it will panic suggesting that our Sum function isn't as correct as we hoped. This is because we are adding the index of each item in the slice, not the actual value. To fix it we need to update our for loop.
```
// Replace this
for n := range numbers {

// With this
for _, n := range numbers {
```
After making the change we should be able to run the code again without an errors. You can verify this on the Go playground: https://play.golang.org/p/kuix1Y7clN9​

At this point I would argue you have written your first test, but I'm sure most of you want to use Go's testing package, so let's look at how to convert what we just did into something we can run with "go test".

First, you would want to create a new source file with a name like sum_test.go. The last bit - the _test.go part - is vital because this is how the go testing tool knows this is a test file.

Once you created the file, you could rewrite the test above with the following code:
```
package math

import (
  "fmt"
  "testing"
)

func TestSum(t *testing.T) {
  numbers := []int{1, 2, 3, 4, 5}
  want := 15
  got := Sum(numbers)

  if got != want {
    t.Errorf("Sum(%v) = %v; want %v", numbers, got, want)
  }
}
```
Finally, you could run this test using "go test" on the command line. I'm going to add a -v flag to get more verbose output, but you don't need it.
```
$ go test -v

=== RUN   TestSum
--- PASS: TestSum (0.00s)
PASS
ok    github.com/joncalhoun/math 0.005s
```
And that's it!

If you'd like to learn a bit more about testing, I have written an article that goes more detail here: https://www.calhoun.io/how-to-test-with-go​

I also have a course that is all about testing - [Test with Go](https://click.convertkit-mail2.com/92ue5mx0v0cdudgnl7tz/8ghqhoh572mewxbk/aHR0cHM6Ly90ZXN0d2l0aGdvLmNvbS8=). If you head over to that website you can request a sample which will include all the videos from Section 2: Tests are just Go code. That means you can see everything we talked about here being coded live, plus lots more!

Happy coding,
Jon Calhoun
Calhoun.io
