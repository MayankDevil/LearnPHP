<?php

    // Open a file for writing (creates a new file if it doen't exist or truncates an existing file)
    
    $file = fopen("example.txt","w");

    if ($file) 
    {
        // Write some content to the file

        fwrite($file,"if you are like follow me on github.com ");

        fclose($file);  // Close the file

        $file = fopen("example.txt","a");   // Open the file for appending

        if ($file) 
        {
            // Append more content to the file

            fwrite($file,"<a href='https://github.com/MayankDevil/'> https://github.com/MayankDevil/ </a>");

            fclose($file);  // Close the file

            // Open the file for reading

            $file = fopen("example.txt","r");

            if ($file) 
            {
                while (!feof($file)) 
                {
                    echo fgets($file);  // Read and display the content of the file
                }
            }
            fclose($file);  // Close the file
        }
        else
        {
            echo "Failed to open the file for reading.";
        }
    }
    else
    {
        echo "Failed to open the file for writing.";
    }
?>