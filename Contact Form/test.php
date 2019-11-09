<?php

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['comment']) && isset($_POST['calcul']))
	{
		if(sizeof(explode(' ', $_POST['name'])) >= 1 && !empty($_POST['name']))
		{
			if(verifyEmail($_POST['email']))
			{
				if(is_numeric($_POST['phone']))
				{
					if(!empty($_POST['comment']))
					{
						if($_POST['calcul'] == "9")
						{
							echo "success";
						}
						else
						{
							exit("You are not human ?!");
						}
					}
					else
					{
						exit("Comment can't be empty.");
					}
				}
				else
				{
					exit("Phone must be numeric.");
				}
			}
			else
			{
				exit("Your email is not valid.");
			}
		}
		else
		{
			exit("Your name is not valid.");
		}
	}
	else
	{
		exit("Data is missing");
	}

function verifyEmail($email)
{
	if(sizeof(explode('@', $email)) == 2 && sizeof(explode('.', $email)) == 2 && !empty(explode('@', $email)[0]) && !empty(explode('@', $email)[1]) && !empty(explode('.', $email)[0]) && !empty(explode('.', $email)[1]))
	{
		return true;
	}
	else
		return false;

	$userName = explode("@", $email);
}
?>