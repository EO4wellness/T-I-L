weight=float(input())
height=float(input())
bmi=weight/(height*height)
if bmi>=30:
  print("Obesity")
elif bmi>=25:
    print("Overweight")
elif bmi>=18.5:
    print("Normal")
else:
  print("Underweight")