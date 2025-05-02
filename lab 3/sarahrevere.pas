PROGRAM SarahRevere(INPUT, OUTPUT);
USES
  DOS;
VAR
  Land, Sea: STRING;
BEGIN
  Land := 'lanterns=1';
  Sea := 'lanterns=2';
  WRITELN('Content-Type: text/plain');
  WRITELN;
  IF GetEnv('QUERY_STRING') = Land
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF GetEnv('QUERY_STRING') = Sea
    THEN
      WRITELN('The British are coming by sea.')
    ELSE
      WRITELN('Sarah didn''t say.')
END.