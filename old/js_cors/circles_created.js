var myCircle = Circles.create({
  id:                  'circles-1',
  radius:              90,
  value:               19,
  maxValue:            100,
  width:               5,
  text:                function(value){return value + '%';},
  colors:              ['#FF99AA', '#119932'],
  duration:            400,
  wrpClass:            'circles-wrp',
  textClass:           'circles-text',
  valueStrokeClass:    'circles-valueStroke',
  maxValueStrokeClass: 'circles-maxValueStroke',
  styleWrapper:        true,
  styleText:           true
});
var myCircle1 = Circles.create({
  id:                  'circles-2',
  value:               15,
  radius:              90,
  maxValue:            100,
  width:               5,
  text:                function(value){return value + '%';},
  colors:              ['#FF99AA', '#119932'],
  duration:            400,
  wrpClass:            'circles-wrp',
  textClass:           'circles-text',
  valueStrokeClass:    'circles-valueStroke',
  maxValueStrokeClass: 'circles-maxValueStroke',
  styleWrapper:        true,
  styleText:           true
});
