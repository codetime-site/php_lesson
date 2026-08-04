#!/bin/bash

files=("introduction.md" "func_anonym.md" "func_arrow.md" "func_example_gpt.md" "func_example.md" "func_interface.md")
new_line="---"

# rm README.md
echo "# Lesson Functions" > README.md
for file in "${files[@]}"; do
    cat "part_md/$file" >> README.md
    echo "" >> README.md
    echo "$new_line" >> README.md
done

