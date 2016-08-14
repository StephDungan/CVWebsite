
function isEmpty( s )
{
    if( s == "" )
    {
        return true;
    }
    else
    {
        return false;
    }

} // function


//**********************************************************
//** isNotInteger( s )
//**********************************************************
// retrurn "true" if String "s" does not contain an integer
//**********************************************************
function isNotInteger( s )
{
    if( parseInt(s) != s  )
    {
        return true;
    }
    else
    {
        return false;
    }


} // function


//**********************************************************
//** isInvalidEmail( s )
//**********************************************************
// retrurn "true" if String "s" does NOT contain a valid email address
//**********************************************************
function isInvalidEmail( s )
{
    // find positions of "@", first and last period and first space
    var atPos    = s.indexOf('@') ;
    var firstPeriodPos   = s.indexOf('.') ;
    var lastPeriodPos   = s.lastIndexOf('.') ;
    var spacePos    = s.indexOf(' ');

    // Array is from 0 .. (length - 1)
    var lastCharPos   = s.length - 1

    // assume email is valid initially
    invalid = false;

    // must have an "@" sign (must be > -1)
    // and it may not be in the first postion (must be > 0)
    if( atPos < 1 )
    {
        invalid = true;
    }

    // the "@" sign must be before the first period
    // there must be at least 1 character between "@" and first period
    if( firstPeriodPos <= (atPos + 1) )
    {
        invalid = true;
    }

    // the last character must not be a period
    if( lastPeriodPos == lastCharPos )
    {
        invalid = true;
    }

    // there must be no spaces (= -1)
    if( spacePos > -1 )
    {
        invalid = true;
    }

    return invalid;

} // function

