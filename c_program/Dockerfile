# Set the base image to use
FROM gcc:latest
# Copy the C program into the container
COPY nfl_scoring_combos.c .
# Compile the C program
RUN gcc -o nfl_scoring_combos nfl_scoring_combos.c
# Set the command to run when the container starts
CMD ["./nfl_scoring_combos"]