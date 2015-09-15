var myCircle = Circles.create({
  id:                  'circles-1',
  radius:              55,
  value:               19,
  maxValue:            100,
  width:               15,
  text:                function(value){return 'N1 - '+value + '%';},
  colors:              ['#222222', '#B2C831'],
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
  radius:              55,
  maxValue:            100,
  width:               15,
  text:                function(value){return 'N2 - '+value + '%';},
  colors:              ['#222222', '#B2C831'],
  duration:            400,
  wrpClass:            'circles-wrp',
  textClass:           'circles-text',
  valueStrokeClass:    'circles-valueStroke',
  maxValueStrokeClass: 'circles-maxValueStroke',
  styleWrapper:        true,
  styleText:           true
});
